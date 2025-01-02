def unmarriedTax(income):
    x=income
    if x>= 0 and x<= 9700:
        return x * .1
    elif x>= 9701 and x<= 39475:
        return x * .12
    elif x>= 39475 and x<= 84200:
        return x * .22
    elif x>= 84201 and x<= 160725:
        return x* .24
    elif x>= 160726 and x<= 204100:
        return x* .32
    elif x>= 204101 and x<= 510300:
        return x * .35 
    elif x>= 510301:
        return x* .37

# 2 Finish this function
# Calculates the taxes a married person owes for 2019
# Input Parameters: amount of income in USD income
# Return Value: amount taxes owed (USD)
def marriedTax(income):
    x=income
    if x>=0 and x<= 19400:
        return x * .1
    elif x>=19401 and x<=78950:
        return x * .12
    elif x>=78951 and x<=168400:
        return x * .22
    elif x>=168401 and x<=321450:
        return x * .24
    elif x>=321451 and x<=408200:
        return x * .32
    elif x>=408201 and x<=612350:
        return x * .35
    elif x>=612351:
        return x * .37




# Calculates the taxes an individual owes for 2019
# Input Parameters: amount of income in USD income and marital status ←-
#Boolean maritalStatus
# Return Value: amount taxes owed (USD)
def tax(income, maritalStatus):
    if(maritalStatus):
        return marriedTax(income)
    else:
        return unmarriedTax(income)

############################
# DATA
############################
UrsalaIncome,UrsalaMarried = 160726, True
KaiserIncome, KaiserMarried = 501000, True
ShilahIncome, ShilahMarried = 20, True
############################
# TESTS
############################
print("Ursala owes ", tax(UrsalaIncome, UrsalaMarried))
print("Kaiser owes ", tax(KaiserIncome, KaiserMarried))
print("Shilah owes ", tax(ShilahIncome, ShilahMarried))

print()
############################
# DATA
############################
UrsalaIncome,UrsalaMarried = 204099, False
KaiserIncome, KaiserMarried = 510310, False
ShilahIncome, ShilahMarried = 9400, False

############################
# TESTS
############################
print("Ursala owes ", tax(UrsalaIncome, UrsalaMarried))
print("Kaiser owes ", tax(KaiserIncome, KaiserMarried))
print("Shilah owes ", tax(ShilahIncome, ShilahMarried))

__name__ == "__main__"