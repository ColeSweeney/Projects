class Car:
    recall = False
    def __init__(self, make, model, year):
        self.make = make
        self.model = model
        self.year = year

    def __str__(self):
        return(self.make+ " " + self.model, str(self.year))

    #@staticmethod
    #def setRecall(self, b):
        #self.recall = b
    
    #def showCar(self):
        #print("Do you like my car ~")
        #print(self.make + " " + self.model + " " + str(self.year))

myCar=Car("Honda", "Accord", 1998)
mySecondCar = Car("Honda", "Accord", 1998)
#myCar.showCar()
#print(myCar)
#print(mySecondCar)
#print(myCar == mySecondCar)


#print(myCar.recall)
#print(mySecondCar.recall)
#print(id(myCar.recall)== id(mySecondCar.recall))

#myCar.setRecall(True)
#print(myCar.recall)
#print(mySecondCar.recall)

print(myCar)