import astronomy as astr

d = astr.earthDiameter
m1 = astr.earthMass
G = astr.gravitationalConstant
def F(m):
    def lbToKg(pnds):
       return pnds*0.453592
    
    myWeight = lbToKg(m)

    N=((G*m1*myWeight)/(d**2))
    return N

print("{0:.2f} Newtons.".format(F(143.3)))

