from flask import Flask, make_response, abort, redirect

app = Flask(__name__);

@app.route('/')
def hello_world():
    return redirect('https://preview.c9users.io/medonaii/cupcakewebsite/Final%20Assignment/index.html?_c9_id=livepreview0&_c9_host=https://ide.c9.io')

@app.route('/users/<username>')
def hello_me(username):
    return 'Hello ' + username + '!'
    
@app.route('/error')
@app.route('/errors')
def error():
    return redirect('https://preview.c9users.io/medonaii/cupcakewebsite/Final%20Assignment/cashout.html?_c9_id=livepreview1&_c9_host=https://ide.c9.io')


@app.route('/unexpected')
def unexpected():
    abort(404)
    return True

if __name__ == '__main__':
    app.run(port=8080, host='0.0.0.0', debug=True)