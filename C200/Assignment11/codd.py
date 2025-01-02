import sqlite3
dog = sqlite3.connect("example1.db")
c = dog.cursor()
r = [('c','a'),('a','b'), ('a','e'),('c','d'),
          ('c','f'),('f','g'), ('f','h'),('h','j'),
          ('h','i')]
c.execute('DROP TABLE IF EXISTS G')
c.execute('''CREATE TABLE G (Parent text, Child)''')
c.executemany('INSERT INTO G VALUES (?,?)', r)
dog.commit()
q = lambda x,y: "SELECT parent FROM G WHERE child = '{0}' AND parent=( SELECT parent FROM G WHERE child ='{1}')".format(x,y)


print(c.execute(q('b','e')).fetchone())
print(c.execute(q('h','g')).fetchone())
print(c.execute(q('e','a')).fetchone())
dog.close()