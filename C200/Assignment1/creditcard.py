# get library for log function
import math

# get user inputs 
APR = float(input("What is your APR: %"))
C = float(input("What is the amount owed on the credit card: $"))
p = float(input("What is the monthy payment made: $"))
i = (APR/100)/12

#complete code here 
n = ( -math.log10(1-(i*(C/p))))/(math.log10 (i+1))

print("You'll make", math.ceil(n), "payments.") 