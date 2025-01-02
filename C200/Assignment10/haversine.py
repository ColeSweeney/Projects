#change lat,lon to radians
import math
from math import  radians, sin, cos, sqrt, asin, atan2 
### TODO: Answer Questions in comments here
# dd() is easier to calculate  
# It is unaccurate since it dosen't take the earth being into concerdration 
# yes
#Distance is never on a 2D plain in real life
##INPUT two tuples that have lat, lon values
# #RETURN distance in miles
def hd(loc1,loc2):
    r = 3961 # radius in miles
    lat1,lon1 = loc1
    lat2,lon2 = loc2
    latd=(lat2-lat1)/2
    lond=(lon2-lon1)/2
    latd2=radians(latd)
    lond2 =radians(lond)
    do= (sin(latd2))**2 + cos(lat1) * cos(lat2) * (sin(lond2))**2
    d1= asin(do**(1/2))*2*r
    return d1
def dd(loc1,loc2):    
    """    
    Standard distance formula    
    """    
    lat1,lon1 = loc1    
    lat2,lon2 = loc2    
    x = lat1 - lat2    
    y = (lon1 - lon2)*cos(radians(lat2))    
    return 69.385*sqrt(x**2 + y**2)
        
def eu_distance(loc1,loc2):    
    """    
    Euclidian Distance Forumula    
    """    
    return sqrt(sum([(i-j)**2 for i,j in zip(loc1,loc2)]))
    
if __name__ == "__main__":    
    #Lindley Hall where we had C200    
    l1 = (39.165341,-86.523588)    
    #Luddy Hall the new Luddy building, where we have C200    
    l2 = (39.172725,-86.523295)    
        
    #Distance between Lindley and Luddy    
    print(hd(l1,l2))    
    print(eu_distance(l1,l2))    
    print(dd(l1,l2))