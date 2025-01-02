
class Graph:
    def __init__(self,nodes):  
        self.nodes = nodes
        self.edges = {}
        for i in self.nodes:
            self.edges[i] = []

    def add_edge(self, pair):
        start,end = pair
        self.edges[start].append(end)

    def children(self,node):
        return self.edges[node]

    def nodes(self):
        return str(self.nodes)
    def __str__(self):
        return str(self.edges)
class Queue:
    def __init__(self):
       self.lst = []
    def size(self):
        return len(self.lst)
    def empty(self):
       return len(self.lst) == 0
    def dequeue(self):
       if not self.empty():
            return self.lst.pop(0)
       else:
            return None
    def enqueue(self, item):
      self.lst.append(item)
    def __str__(self):
        return str(lst)

def bfsfull(g,node):
    visted = []
    q = Queue()
    q.enqueue(node)
    while not q.empty():
        nnode = q.dequeue()
        if nnode not in visted:
            print(nnode)
            visted.append(nnode)
            clist = g.children(nnode)
            for n in clist:
                if n not in visted:
                    q.enqueue(n)
        

    for nodes in g.nodes:
        if nodes not in visted:
            print(nodes)

if __name__=="__main__":
    my_graph = Graph([1,2,3,4,5,6,7,8])
    elst = [(1,2),(1,3),(2,8),(3,5),(3,4),(5,6),(6,4),(6,7)]
    for i in elst:
        my_graph.add_edge(i)
    print(my_graph.edges)
    bfsfull(my_graph,5)

    