# Lab 4
# Fall 2019 C200 / H200

"""
Below, finish the dictionary. Each key is a side of a die (1 - 6), and the 
value is the opposite side of the die. The opposite side of a 
dice always adds up to 7
"""
dice_dict= {}


def twisted_die_roll():
    """
    Function that generates a random roll 1 - 6, and 
    uses previously defined dictionary to return the opposite side.
    If 1 was generated, return 6. 
    To understand Random, take a moment to read through the link to find what specific 
    function from the MODULE `random`.
    https://docs.python.org/3/library/random.html
    """
    pass # TODO


def twisted_dice_rolls(n):
    """
    Function that uses a for loop to generate `n` twisted die rolls. 
    (You must use a previous function you made) and store them in a 
    list. Return the list
    """
    pass # TODO

def stats_twisted_rolls_list(n):
    """
    Generate `n` twisted die rolls (either a for loop or using a previous function) and 
    determine the roll statitics (how many times a 1, 2, ... 6 was rolled) in a list. 
    Print the list AND return the list. 
    Hint: how can we keep track of the statistics since we only have an ordered list and 
    what ever number we just rolled
    """
    pass # TODO

def stats_twisted_rolls_dictionary(n):
    """
    Generate `n` twisted die rolls (either a for loop or using a previous function) and determine
    the roll statistics (how many times a 1, 2, ... 6 was rolled) in a DICTIONARY. 
    Print the dictionary AND return the dictionary. 
    You cannot call `stats_twisted_rolls_list` in this function. 
    """
    pass # TODO


def sumOfOddNumbers(listOfNums):
    """
    Using a while loop, find the odd numbers and add them up.
    """
    pass # TODO

def getFirstHalfOfString(string):
    """
    Using a loop, get the characters from the first half of the string
    Note: You can't use slicing, you can use indexing
    """
    pass # TODO

def getSecondHalfOfString(string):
    """
    Get the second half of the string.
    You must only use slicing (plus a couple of other functions) to get the
    second half of the string
    """
    pass # TODO


def main():
    """
    TODO: Fill in tests for each of the above functions.
    """
    pass
    ### Fill in tests for dice roll
    # TODO
    ### Fill in tests for remaining functions
    # TODO




if __name__ == "__main__":
    main()