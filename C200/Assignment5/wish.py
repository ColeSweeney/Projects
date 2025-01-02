def is_magic(ms):
    if ((ms[0][0] + ms[0][1] + ms[0][2]) == (ms[0][0] + ms[1][0] + ms[2][0]) == (ms[1][0] + ms[1][1] + ms[1][2]) == (ms[0][1] + ms[1][1] + ms[2][1]) == (ms[2][0] + ms[2][1] + ms[2][2]) == (ms[0][2] + ms[1][2] + ms[2][2]) == (ms[0][0] + ms[1][1] + ms[2][2])):
        print ("This is a magic Square")
    else:
        print ("This is not a magic Square...hide")

ms = [[4, 9, 2],[3,5,7],[8,1,6]]

is_magic(ms)

ms = [[4, 9, 2],[3,5,7],[8,2,6]]

is_magic(ms)