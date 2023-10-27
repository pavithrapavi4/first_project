<?php
from flask import Flask, render_template, request
from jinja2 import escape

app = Flask(__name__)

@app.route('/')
def index():
    return render_template('index.html')

@app.route('/submit', methods=['POST'])
def submit():
    user_input = request.form.get('user_input')
    # Escaping user input to prevent XSS attacks
    user_input_escaped = escape(user_input)
    return f'You submitted: {user_input_escaped}'

if __name__ == '__main__':
    app.run()
?>