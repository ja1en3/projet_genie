import sqlite3

var = sqlite3.connect("../bd/bd_test.db")

cur = var.cursor()

cur.execute("""
CREATE TABLE IF NOT EXISTS users ()