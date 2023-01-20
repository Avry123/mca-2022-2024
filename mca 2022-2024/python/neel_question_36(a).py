#Creating a thread creation without using class.

from threading import *

def display() :
    print('Thread is running>>>>')
    for i in range(5) :
        print(i)


t = Thread(target=display())
t.start()
