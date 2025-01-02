value = 0
for j in range(0,1):
    value -= 1
    print(value *"*")
for i in range(0,10):
    value+=1
    print(value * "*")
print()
val2 = 0
for i in range(0,9):
    val2 += 1
    value +=val2
    print(value * "*")
for i in range(0,9):
    value-= val2
    val2-= 1
    print(value * "*")
value=21
space = 0
for i in range(0,11):
    print(space*'', value * "*", space*'')
    value -=2
    space +=2



  
