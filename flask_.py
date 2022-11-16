from flask import Flask

app = Flask(__name__)

@app.route('/')
def index():
  return "Hello world!" #if you want to render a .html file,
                        # import render_template from flask and use
                        #render_template("index.html") here.

if __name__ == '__main__':
    app.debug = True
    app.run(host="127.0.0.1",port=8080)