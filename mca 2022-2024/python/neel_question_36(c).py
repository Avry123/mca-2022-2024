#without using a subclass to thread class.
from threading import Thread

class mythread(Thread) :
      def __init__(self,string) :
          self.name = string
      def display(self,x,y) :
          print(self.name)
          print('x % d, y % d', %(x,y))
obj = mythread('point')
t = Thread(target = obj.display, args = (10,20))
t.start()
