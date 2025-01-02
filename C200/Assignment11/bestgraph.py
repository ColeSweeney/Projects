
class Graph:
    import numpy as np
    def __init__(self,nodes):
        self.nodes = nodes
        self.edges = {}
        for i in self.nodes:
            self.edges[i] = []
    def add_edge(self, pair):
        start,end = pair
        if end in self.nodes:
            if start in self.nodes:
                if end in self.edges[start]:
                    self.edges[start].append(end)
                    return 1
        else:
            return -1
    def add_node(self,n):
        if n not in self.nodes:
            self.nodes.append(n)
            self.edges[i] = []
            return 1
        else:
            return -1
    
    def del_node(self,n):
        if n in self.nodes:
            self.nodes.remove(n)
            self.edges.pop(n)
            return 1
        else:
            return -1
    def del_edge(self,start,end):
        if start and end in self.edges:
            self.edges.pop(end)
            return 1
        else:
            return -1
    def reachable(x,y,self):
        #number of nodes
        nn = len(self.nodes)
        a=np.zeros((nn,nn), dtype = int)

        for i in range(self.nodes):
            for j in range(self.nodes):
                if self.nodes[i] not in self.nodes[j]:
                    a[i][j]=0
                else:
                    a[i][j]= 1
        
        a=np.dot (a,a)+a
        a=np.dot (a,a)+a
    
        if a[self.nodes[x]] and a[self.nodes[y]] > 0:
            return True
        else:
            return False

    def children(self,node):
        return self.edges[node]
    def nodes(self):
        return str(self.nodes)
    def __str__(self):
        return str(self.edges)
