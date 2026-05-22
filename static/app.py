import os
from flask import Flask, render_template, request, redirect
import sqlite3

BASE_DIR = os.path.abspath(os.path.join(os.path.dirname(__file__), '..'))
app = Flask(
    __name__,
    template_folder=os.path.join(BASE_DIR, 'templates'),
    static_folder=BASE_DIR,
    static_url_path=''
)

# CODE ADMIN SIMPLE
CODE_ADMIN = "1234"

# CONNEXION DATABASE
def get_db_connection():
    db_path = os.path.join(BASE_DIR, 'restaurant.db')
    conn = sqlite3.connect(db_path)
    conn.row_factory = sqlite3.Row
    return conn

# CREATION TABLE
def create_table():
    conn = get_db_connection()

    conn.execute('''
    CREATE TABLE IF NOT EXISTS commandes (
        id INTEGER PRIMARY KEY AUTOINCREMENT,
        nom TEXT,
        email TEXT,
        telephone TEXT,
        adresse TEXT,
        details TEXT,
        statut TEXT DEFAULT 'En attente'
    )
    ''')

    conn.commit()
    conn.close()

create_table()

# PAGE ACCUEIL
@app.route('/')
def index():
    return render_template('index.html')

@app.route('/commande')
def commande():
    return render_template('commande.html')

@app.route('/menu')
def menu():
    return render_template('menu.html')

@app.route('/a_propos')
def a_propos():
    return render_template('a_propos.html')

# AJOUT COMMANDE
@app.route('/commander', methods=['POST'])
def commander():

    nom = request.form['name']
    email = request.form['email']
    telephone = request.form['phone']
    adresse = request.form['address']
    details = request.form['order_details']

    conn = get_db_connection()

    conn.execute('''
    INSERT INTO commandes
    (nom, email, telephone, adresse, details)
    VALUES (?, ?, ?, ?, ?)
    ''', (nom, email, telephone, adresse, details))

    conn.commit()
    conn.close()

    return "Commande enregistrée avec succès"

# VOIR COMMANDES
@app.route('/commandes')
def voir_commandes():

    conn = get_db_connection()

    commandes = conn.execute(
        'SELECT * FROM commandes'
    ).fetchall()

    conn.close()

    return render_template(
        'commander.html',
        commandes=commandes
    )

# PAGE ADMIN
@app.route('/admin/<int:id>', methods=['GET', 'POST'])
def admin(id):

    if request.method == 'POST':

        code = request.form['code']

        if code == CODE_ADMIN:

            nouveau_statut = request.form['statut']

            conn = get_db_connection()

            conn.execute(
                'UPDATE commandes SET statut=? WHERE id=?',
                (nouveau_statut, id)
            )

            conn.commit()
            conn.close()

            return redirect('/commandes')

        else:
            return "Code incorrect"

    return render_template('admin.html', id=id)

if __name__ == '__main__':
    app.run(debug=True)