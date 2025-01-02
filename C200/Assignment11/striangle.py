import pygame, sys
import math
from pygame.locals import *
import random as rn
pygame.init()
BLUE = (0,0,255)
WHITE = (255,255,255)
DISPLAYSURF = pygame.display.set_mode((500, 400), 0, 32)
pygame.display.set_caption('S-Triangle')
#INPUT takes a location loc = (x,y) pair of points and width
#RETURN 3 points of the equilateral triangle determined by loc and width
def triangle(loc,width):
    d = math.sqrt((width**2)-((width/2)**2))
    Pt1 =((width/2)+loc[0], loc[1])
    Pl2 =(loc[0], loc[1]+d)
    Pr3 =(loc[0]+ width, loc[1]+d)
    return Pt1, Pl2, Pr3
DISPLAYSURF.fill(WHITE)
#Draws Triangle
#(triangle(loc,w)) is a tuple of tuples...)
def draw_triangle(loc, w):
    pygame.draw.polygon(DISPLAYSURF, BLUE , (triangle(loc,w)),1)
#INPUT location and width
#RETURN nothing -- follows algorith
def s(loc,width):
    width/=2
    d = math.sqrt((width**2)-((width/2)**2))
    if True:
        f1t=((width/2)+loc[0], loc[1])
        f2l=(loc[0], loc[1]+d)
        f3r=(loc[0]+ width, loc[1]+d)


        draw_triangle(f1t,width)
        draw_triangle(f3r,width)
        draw_triangle(f2l,width)
        if width>1:
            s(f3r,width)
            s(f2l,width)
            s(f1t,width)
s((0,0),440)
while True:
    for event in pygame.event.get():
        if event.type == QUIT:
            pygame.quit()
            sys.exit()
    pygame.display.update()