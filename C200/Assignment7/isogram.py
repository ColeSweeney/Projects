def is_isogram(xword):
    w={}
    for items in xword:
        #if w[items] in xword:
        if items in w:
            w[items] +=1
        else:
            w[items] = 1
        if w[items] >= 2:
            return False 
    return True

if __name__=="__main__":
    words = ["dermatoglyphics","palindrome", "anagram"]

for w in words:
    print(is_isogram(w))