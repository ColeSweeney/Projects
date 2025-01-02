# allows to pause
import os

#blood bank type:units
bank = {"A+":5, "A-":6, "O+":4, "O-":2, "B+":5, "B-":6, "AB+":7, "AB-":8}
#blood donor:(recipient1, ..., recipientk)
donorReceiver = {
    "O-":("O-","O+","A+","A-","B+","B-","AB+","AB-"),
    "O+":("O+","A+","B+","AB+"),
    "A-":("O-","O+","A+","A-",),
    "A+":("A+","AB+"),
    "B+":("B-","B+","AB+","AB-"),
    "B-":("B-","B+","AB+","AB-"),
    "AB-":("AB+","AB-"),
    "AB+":("AB+") }
    
#INPUT donor’s blood type donorBloodType
#Return a tuple of the types that can accept the blood
def red_blood_compability(donorBloodType):
    return donorReceiver[donorBloodType]
    


# Show the current bank stock
def showBank():
    print("Current Blood Bank")
    print("{0:>4} {1:>5}".format("Type","Units"))
    for k,v in bank.items():
        print("{0:>4} {1:>4}".format(k,v))
        
#Show number of units of particular type in the bank
def showTypeInBank(bloodType):
    units = bank[bloodType]
    print("{0:>1} units of {1:>2} in bank".format(units, bloodType))

#INPUT
#3 Parameters donor blood type is donor, recipient’s type is recipient,and pints is the
# number of pints that donor will give to recipient using the bank.
# Return 1 if the blood bank has enough pints to give
# and remove the amount of pints used from the bank
# Return 0 if either the recipient can’t recieve the type or there’s not enough blood
def transfusion(donor, recipient, pints):
    c = red_blood_compability(recipient)
    if donor in c:
        #check for avialibiy of type and update
        if bank[donor] >= pints:
            bank[donor]-=pints
            return 1
    else:
        return 0
        



###############################
#TESTING
#Shows current Bank
showBank()
os.system("pause")


#Enough A+==5 units, and 4 can be given to AB+
#Result is A+==1
if (transfusion("A+","AB+",4)):
    print("Transfusion successful")
else:
    print("Transfusion failed")
showTypeInBank("A+")
os.system("pause")
        
#Fail because O+ cannot donate to B-
if (transfusion("O+", "B-",1)):
    print("Transfusion successful")
else:
    print("Transfusion failed")

#Fail because insufficient units of blood
if (transfusion("A-","O-",7)):
    print("Transfusion successful")
else:
    print("Transfusion failed")

#Succeed and AB-==0 at end
if (transfusion("AB-","AB+",8)):
    print("Transfusion successful")
else:
    print("Transfusion failed")
showTypeInBank("AB-")
os.system("pause")

showBank()

if __name__ == "main":
    pass