def occurencesWhile(lst, var):
    """
    Using a while loop, find the number of occurences in the list
    """
    f = 0
    i = 0
    while i < len(lst):
        if lst[i] == var:
            f += 1
        i += 1

    return f


def occurencesWhileList(lst, var):
    """
    Using a while loop, find the number of occurences in the list,

    The exception,
    """
    item = 0
    while lst:
        if lst[0] == var:
            item += 1
        lst = lst[1:] # This is utilizing slicing

    return item



def opperationList(opsList, opp):
    """
    Given a list of lists, where each inner list has a size > 0.

    Using the operation provided:
    - subtract: s
    - multiply: m
    - addition: a

    Apply that to a whole list
    """
    resultingList = []
    index1 = 0
    index2 = 0 # Do this first
    while index1 < len(opsList):
        currList = opsList[index1]
        index2 = 0 ## Explain why you need it here after running it once
        if opp == "m":
            currResult = 1
        else:
            currResult = 0
        
        while index2 < len(currList):
            if opp == "m":
                currResult *= currList[index2]
            elif opp == "a":
                currResult += currList[index2]
            elif opp == "s":
                currResult -= currList[index2]
            index2 +=1 
        index1 += 1
        resultingList += [currResult]

    return resultingList