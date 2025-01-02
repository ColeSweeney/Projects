def lr(xlst):
    num = 0
    up = 0
    for i in xlst:
        if i == 1:
            num = num + 1 
        if num > up:
            up = num
        else:
            num = 0
    return up
            
            
            
x = [0,1,1,1,1,1,0,1,1,0,1,0,1,0,1,1,0,1,1,0]
print(lr(x))