class Graph:
    """
    Graph Representation of class
    Created by Dr. D
    Modified by AIs
    """
    def __init__(self, nodes, directional):
        # FIXME: Can you make it so the class knows if it is a directional or undirect graph when created?
        self.nodes = nodes
        self.directional = directional
        self.edges = {}
        for i in self.nodes:
            self.edges[i] = []
    def add_edge(self, pair):
        """
        Adds an edge between the first node to 
        the second node in the list
        """
        start, end = pair
        self.edges[start].append(end)
        # FIXME: Does the end node connect to the start node? (Refer to the first FIXME)
        if self.edges[start] in self.edges[end] and self.edges[end] in self.edges[start]:
            pair = True
        else:
            pair = False

    def children(self, node):
        """
        Returns a list of all nodes attached to the node provided
        """
        # FIXME: What happens if the node is not in the graph?
        if self.node not in  Graph:
            return self.node= []
        return self.edges[node]
    def dettachedNodes(self):
        """
        Returns a list of nodes have no edges
        """
        # TODO: Implement this to search the graph to find nodes with no edges
        return []
        # CHALLENGE: Can you make it for a directional graph to return nodes that have no edges COMING IN and leaving
    def __str__(self):
        finalString = ""
        for n in self.nodes:
            finalString += str(n) + " -> " + str(self.edges[n]) + "\n"
        return finalString