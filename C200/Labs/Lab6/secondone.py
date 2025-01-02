import matplotlib.pyplot as plt 
import numpy as np 

x = np.arange(0, 10, 0.2)
y = np.sin(x)
fig, ax = plt.subplots()
ax.plot(x,y)
plt.show()


def my_plotter(ax, data1, data2, param_dict):
    out = ax.plot(data1, data2, **param_dict)
    return out
data1, data2, data3, data4 = np.random.randn(4, 100)
fig, ax = plt.subplots(1,1)
my_plotter(ax, data1, data2, {'marker': 'x'})
plt.show()

fig, (ax1, ax2)= plt.subplots(1, 2)
my_plotter(ax1, data1, data2, {'marker': 'x'})
my_plotter(ax2, data3, data4, {'marker': 'o'})
plt.show()

