import math

# 1 Finish this function
# Calculates speed in mph from distance (miles) and time (hours)
# Input Parameters: distance d (miles), time t (hours)
#Return Value: speed (mph)78

def speed(d, t):
    return d/t

# 2 Finish this function
# Finds distance in miles using speed (mph) and time (hours)
# Input Parameters: speed s (mph), time t (hours)
# Return Value: distance (miles)

def distance (s, t):
    return s*t

# 3 Finish this function
# Finds time in hours using speed (mph) and distance (miles)
# Input Parameters: speed s (mph), distance d (miles)
# Return Value: time (hours)
def time (s, d):
    return s*d

# 4 Finish this function
# Converts hours to minutes
# Input Parameters: hours numberHours
# Return Value: minutes
def hours_to_min(numberHours):
    return numberHours * 60

# 5 Finish this function
# Converts minutes to seconds
# Input Parameters: minutes numberMinutes
# Return Value: seconds
def min_to_sec(numberMinutes):
    return numberMinutes * 60

# 6 Finish this function
# Converts feet to miles
# Input Parameters: feet numberFeet
# Return Value: miles
def feet_to_mile(numberFeet):
    return numberFeet/5280

# 7 Finish this function
# Converts miles to kilometers
# Input Parameters: miles numberMiles
# Return Value: kilometers
def miles_to_kilometers(numberMiles):
    return numberMiles * 1.60934

# 8 Finish this function
# Converts kilometers to miles
# Input Parameters: kilometers numberKilometers
# Return Value: miles
def kilometers_to_miles(numberKilometers):
    return numberKilometers/1.60934

# 9 Finish this function
# Converts miles to feet
# Input Parameters: miles numberMiles
# Return Value: feet
def miles_to_feet(numberMiles):
    return numberMiles * 5280

# 10 Finish this function
# Converts degrees to radians
# Input Parameters: degrees numberDegrees
# Return Value: radians
def degrees_to_radians(numberDegrees):
    return numberDegrees * (math.pi / 180)


# 11 Finish this function
# Finds the length of side c of a triangle (Law of Cosines)
# where gamma is degrees and is converted to radians
# Input Parameters: side length a, side length b, degrees of angle gamma
# Return Value: length of side c
def side_length_triangle(a, b, gamma):
    return math.sqrt((a**2+b**2)-2*a*b*math.cos(math.radians(gamma)))

# 12 Finish this function
# Convert Celsius to Fahrenheit
# Input Parameters: degrees Celsius numberDegreesC
# Return Value: degrees Fahrenheit
def celsius_to_fahrenheit (numberDegreesC):
    return (9/5)*numberDegreesC + 32

# 13 Finish this function
# Converts Fahrenheit to Celsius
# Input Parameters: degrees Fahrenheit numberDegreesF
# Return Value: degrees Celsius
def fahrenheit_to_celsius(numberDegreesF):
    return ((numberDegreesF -32)/(9/5))

# 14 Finish this function
# Converts Fahrenheit to Kelvin
# Input Parameters: Kelvin numberKelvin
# Return Value: degrees Fahrenheit
def kelvin_to_fahrenheit(numberKelvin):
    return  (((numberKelvin -273) * (9/5)) +32)

# 15 Finish this function
# Given a stock price p and amount change +/- d,
# calculate the percentage difference
# Input Parameters: stock price p, dollar amount change d
# Return Value: percent change
def percent_change(s, d):
    if s<0:
        return -1-((s+d)/s)
    else:
        return (s+d)/s-1



# 16 Finish this function
# Convert parsecs to kilometers
# Input Parameters: parsecs numberParsecs
# Return Value: kilometers
def parsecs_to_kilometers(numberParsecs):
    return numberParsecs * (3.086*(10**13))

# 17 Finish this function
# Convert light years to parsecs
# Input Parameters: light years numberLightYears
# Return Value: parsecs
def lightyears_to_parsecs(numberLightYears):
    return numberLightYears / 3.26 




#####################################
# DATA               
#####################################
s1 = 75       # miles/hours
t1 = 4       # hours
t2 = 2020      # min
t3 = 414241     # sec
d1 = 100      # miles
d2 = 1442412    # feet

#####################################
# TESTS              #
#####################################
print(speed(d1,t1), "miles/hour")

print(speed(miles_to_kilometers(d1),t1), "kilometers/hour")

print(speed(miles_to_kilometers(d1),min_to_sec(hours_to_min(t1))), "←↩kilometers/hour")

print(celsius_to_fahrenheit(-30), "Fahrenheit")

print(min_to_sec(hours_to_min(1)), "seconds")

print(fahrenheit_to_celsius(-22), "Celcius")

print(celsius_to_fahrenheit(20), "Fahrenheit")

print(kelvin_to_fahrenheit(293), "Fahrenheit")

print(fahrenheit_to_celsius(kelvin_to_fahrenheit(293)), "Celcius")

print(side_length_triangle(8,11,37), " units")

print(degrees_to_radians(30), "radians")

print(percent_change(170.90,3.31), "percent change")

print(percent_change(170.90,-3.31), "percent change")

print(parsecs_to_kilometers(231), "kilometers")

print(lightyears_to_parsecs(100), "parsecs")