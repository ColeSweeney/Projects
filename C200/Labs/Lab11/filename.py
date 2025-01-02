import pygame
import sys
import random as rn
import random as rn2
pygame.init()

xc=20
yc=20
### Example of color representation in Pygame
BLACK = ( 0,0,0)
WHITE = (255,255,255)
BLUE =  (0,0,255)
RED =   (255,0,0)
YELLOW = (255,255,0)  

size = [300, 300] # Represents the size of the screen
screen = pygame.display.set_mode(size)
pygame.display.set_caption("C200 CHANGE") # Title of the window

class Rectangle:
    def __init__(self,color,loc):
        self.loc = loc
        self.color = color
    def my_draw(self,screen):
        pygame.draw.rect(screen, self.color, self.loc)

    def my_move(self,xoffset,yoffset):
        self.loc = [self.loc[0]+xoffset,self.loc[1]+yoffset] + self.loc[2:]
    
    def inside(x,y,Rectangle):
        if (x>Rectangle.left) and (x<Rectangle.right) and (y>Rectangle.top) and (y<Rectangle.bottom):
            return True
    def collusion(self,x):
        min x=10 min y=15
        max x=30 max y=35

r= Rectangle(BLACK, [0,0,20,20])
s= Rectangle(RED, [25,25,20,20])
if __name__ == "__main__":    
    while True:        
        pygame.time.wait(10)        
        
        for event in pygame.event.get():             
            ### Allows the user to use the "X" button to            
            ### close the window             
            if event.type == pygame.QUIT:                 
                pygame.quit()                
                sys.exit()            
           

        screen.fill(WHITE)

        r.my_draw(screen)
        if r.loc[0] > 280:         
            xd = -rn.randint(1,3)
        if r.loc[1] > 280:
            yd = -rn.randint(1,3)
        if r.loc[0] < 10:
            xd = rn.randint(1,3)
        if r.loc[1] < 10:
            yd = rn.randint(1,3)
        
        s.my_draw(screen)
        if s.loc[0] > 280:         
            xc = -rn2.randint(1,3)
        if s.loc[1] > 280:
            yc = -rn2.randint(1,3)
        if s.loc[0] < 10:
            xc = rn2.randint(1,3)
        if s.loc[1] < 10:
            yc = rn2.randint(1,3)

        r.my_move(xd,yd)
        s.my_move(xc,yc)
        pygame.display.flip()
   

