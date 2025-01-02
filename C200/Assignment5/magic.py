# Input value: some number
# Output value: the result of the magical encantation
def magic(x):
    s=x+15
    p=s*3
    d=p-9
    q=d/3
    x=q-12
    return x

if __name__=="__main__":
    #get input
    x = input("Pick any positive whole number: ")

    #change from string to integer
    x = int(x)

print("Your number was", magic(x))