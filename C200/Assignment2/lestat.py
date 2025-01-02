#DATA makes strings easier to type
Ap,Bp,Op,ABp = "A+","B+","O+","AB+"
An,Bn,On,ABn = "A-","B-","O-","AB-"


#INPUT Blood types x can receive from y
#OUTPUT Boolean
def receiveFrom(x,y):
    return((x==Ap) and (y==Ap or y==An or y==Op or y==On)) or ((x==Bp) and (y==Bp or y==Bn or y==Op or y==On)) or ((x==ABp) and (y==Ap or y==Bp or y==ABp or y==On or y==Op or y==An or y==Bn or y==ABn)) or ((x==On) and (y==On)) or ((x==Op) and (y==Op or y==On)) or ((x==An) and (y==An or y==On)) or ((x==Bn) and (y==Bn or y==On)) or ((x==ABn) and (y==An or y==Bn or y==On or y==ABn))
    




#INPUT Blood types x can donate to y
#OUTPUT Boolean
def donateTo(x,y):
    return((x==Ap) and (y==Ap or y==Bp)) or ((x==Bp) and (y==Bp or y==ABp)) or((x==ABp) and (y==ABp)) or ((x==On) and (y==Ap or y==Bp or y==ABp or y==On or y==Op or y==An or y==Bn or y==ABn)) or ((x==Op) and (y==Op or y==Ap or y==Bp or y==ABp)) or ((x==An) and (y==An or y==Ap or y==ABn or y==ABp))or ((x==Bn) and (y==Bn or y==Bp or y==ABn or y==ABp)) or ((x==ABn) and (y==ABn or y==ABp))


    
#TO DO:IMPLEMENT CODE

x = [Ap,Bp,Op,ABp, An,Bn,On,ABn]

for i in x:
    print(i," donate to ",end="")
    for j in x:
        if donateTo(i,j):
            print(j," ",end="")
    print()

print()
for i in x:
    print(i," receive from ", end="")
    for j in x:
        if receiveFrom(i,j):
            print(j, " ", end="")
    print()
__name__ == "__main__"