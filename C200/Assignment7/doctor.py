sum = 0                                     # Sum keeps track of how many times you input "1"

A = input("Do you have adominal pain: 1/0 ") # Input for Question 1
if int(A) == 1:                              # You said you had the symptom
    sum+=1                                   # If you have the symptom 1 is added to sum
elif int(A) == 0:                            # You said you didn't have the symptom
    None                                     # If you dont have the symptom nothing is recorded
B = input("Do you have nausea: 1/0 ") # Input for Question 2
if int(B) == 1:                        # You said you had the symptom
    sum+=1                            # If you have the symptom 1 is added to sum
elif int(B) == 0:
    None 
C = input("Do you have vomiting: 1/0 ") # Input for Question 3
if int(C) == 1:                         # You said you had the symptom
    sum+=1                              # If you have the symptom 1 is added to sum
    if sum == 3:
        print("Appendicitis")
elif int(C)== 0:
    None       
if sum< 3:                               # If sum reaches 3 then the survey stops here
    D = input("Do you have fever: 1/0 ")
    if int(D) ==1:                      # You said you had the symptom
        sum+=1                           # If you have the symptom 1 is added to sum
        if sum== 3:
            print("Appendicitis")
    elif int(D)==0:
        None
if sum < 3:                              # If sum reaches 3 then the survey stops here
    E = input("Do you have loss of appetite: 1/0 ")
    if int(E)==1:                          # You said you had the symptom
        sum+=1                            # If you have the symptom 1 is added to sum
        if sum== 3:                       # If the new sum is 3 then it prints Appendicitis
            print("Appendicitis")
        elif sum < 3:                     # If you have less then symptoms it prints "No appendicitis"
            print("No Appendicitis")
    if int(E)==0:
        print("No Appendicicitis")
        






