filename = "Life/IHME_USA_LIFE_EXPECTANCY_1985_2010 (2).csv"
import csv


def worst_county(year):
    with open(filename) as q:
        state=''
        county=''
        Life_Expectancy=100
        reader = csv.DictReader(q)
        for row in reader:
            if int(row['Year']) == year:
                Avg=(float(row["Female life expectancy (years)"]) + float(row["Male life expectancy (years)"]))/2
                if Avg < Life_Expectancy:
                    Life_Expectancy=Avg
                    state = row['State']
                    county = row['County']

    return (state,county)
def plotdata(state,county):
    x= [i for i in range(1985,2011)]
    femaleNational=[]
    maleNational=[]
    femaleState=[]
    maleState=[]
    femaleCounty=[]
    maleCounty=[]
    with open (filename) as q:
        reader = csv.reader(q)
        for row in reader:
            if state ==row[0] and county == row[1]:
                femaleNational+=[float(row[5])]
                maleNational+=[float(row[8])]
                femaleState+=[float(row[6])]
                maleState+=[float(row[9])]
                femaleCounty+=[float(row[4])]
                maleCounty+=[float(row[7])]
        
        plt.plot(x, femaleNational, 'g^')
        plt.plot(x, maleNational, 'r^')
        plt.plot(x, femaleState, 'gs')
        plt.plot(x, maleState, 'rs')
        plt.plot(x, femaleCounty, 'g--')
        plt.plot(x, maleCounty, 'r--')

        plt.xlabel("Years")
        plt.ylabel("Life Expectancy")

        
        plt.legend(["Female Life Expectancy_County","Female Life Expectancy_State", "Female Life Expectancy_National", "Male Life Expectancy_County", "Male Life Expectancy_State", "Male Life Expectancy_National"])
        plt.title(str(county) +'',''+ str(state) + ": Life Expectancy"
        
        plt.savefig("Life/state_county.png")
    return plt.show()

if __name__ == "__main__":
    state,county= worst_county(2010)
    plotdata(state,county)