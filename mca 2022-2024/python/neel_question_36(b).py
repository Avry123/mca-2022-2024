#Using a subclass to Thread class

from threading import Thread

class myThread(Thread) :
    def showThread(self) :
        print('Thread inside a method which is a subclass of thread')
        for i in range(6):
            print(i)

t = myThread()
t.showThread()
