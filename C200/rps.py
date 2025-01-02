import random as rn

rules = [["r","s"],["p","r"],["s","p"]]
history = {"r":0, "p":0, "s":0}
wins = 0
ties = 0
loses = 0
moves = ["r", "s", "p"]
cnt = 0
def get_best_move():
    m = "r"    
    for i in history.keys():        
        if history[i] >= history[m]:            
            m = i    
    for i in rules:        
        if i[1] == m:            
            return i[0]
print("We'll play 10 games hoomun")
while cnt < 11:    
    x = input("play: ")    
    history[x] += 1    
    if history == 1:        
        m = moves[rn.randint(0,2)]    
    else:        
        m = get_best_move()        
        if x == m:            
            ties =+ 1            
            print("tie")        
        elif [x,m] in rules:            
            print("human wins {0} beats {1}".format(x,m))            
            wins += 1        
        else:            
            loses += 1            
            print("robot wins {0} beats {1}".format(m,x))        
            cnt += 1
            print("human wins : {0}".format(wins))
            print("robot wins : {0}".format(loses))
            print("ties:  {0}".format(ties))