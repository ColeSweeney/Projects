# Will be stored in `Labs/Lab5/lab5.py`. 

# Tasks for this problem is:
# - In the python file, write (so overwrite the file each time) a series of non-repeating 

#   numbers (more than 10 numbers) to a file in the path `Labs/Lab5/storage.txt`
# - After writing to the file, read from the same file to get a total score
# - Append the total score to the file
# - Read from said file again and get the total score.
num ={ "1","2","3","4","5","6","7","8","9","10","11","12" }
fileToWrite = open("Labs/Lab5/storage.txt", "w")
for n in num:
    fileToWrite.write(n + "\n")
fileToWrite.close()
counting = open("Labs/Lab5/storage.txt", "r")
print("storage.txt")

TotalScore = 0
for n in counting:
    TotalScore +=1
counting.close()

print(TotalScore)

fileToAppend = open("Labs/Lab5/storage.txt", "a")
for a in fileToAppend:
    fileToAppend.write("total + \n")
fileToAppend.close()

