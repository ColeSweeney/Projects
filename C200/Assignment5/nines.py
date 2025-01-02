
def div_9(n):
    sum = 0
    sum += (int(n/9))
    y = sum/9
    if y >= 1:
       print("True")
    elif n==0:
        print("False")
    else:
        print("False")

x = [99,0,18273645,22]

for i in x:
    print(div_9(i))