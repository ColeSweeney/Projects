from flask import Flask, render_template, request, redirect, url_for
import csv

app = Flask(__name__)
DINO_KEYS = ['slug', 'name', 'description', 'image', 'image-credit', 'source-url', 'source-credit']
with open('dinosaurs.csv', 'r') as csvfile:
   data = csv.DictReader(csvfile)
   dinosaurs = {row['slug']:{'name':row['name'], 'description':row['description'], 'image':row['image'], 'image-credit':row['image-credit'], 'source-url':row['source-url'], 'source-credit':row['source-credit']} for row in data}

@app.route('/')
@app.route('/dino/<dino>')
def index(dino=None):
    print(dino)
    if dino and dino in dinosaurs.keys():
        dinosaur=dinosaurs[dino]
        return render_template('dino.html', dinosaur=dinosaurs)
    else:
        return render_template('index.html', dinosaurs=dinosaurs)

@app.route('/about')
def about():
    return render_template('about.html')
@app.route("/add-dino", methods=['GET', 'POST'])
def add_dino():
    # if POST request received (form submitted)
   if request.method == 'POST':
       # get dinosaurs.csv data
       dinosaurs = get_dinos()
       # create new dict to hold dino data from form
       newDino={}
       # add form data to new dict
       newDino['slug'] = request.form['slug']
       newDino['name'] = request.form['name']
       newDino['description'] = request.form['description']
       newDino['image'] = request.form['image']
       newDino['image-credit'] = request.form['image-credit']
       newDino['source-url'] = request.form['source-url']
       newDino['source-credit'] = request.form['source-credit']
       # add new dict to csv data
       dinosaurs[request.form['name']] = newDino
       # write csv data back out to csv file
       set_dinos(dinosaurs)
       # since POST request, redirect after Submit (we want the display to change so user knows form went through)
       return redirect(url_for('index'))

   # if GET request received (display form)
   else:
       return render_template('add-dino.html')


