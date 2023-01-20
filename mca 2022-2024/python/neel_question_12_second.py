Python 3.10.8 (tags/v3.10.8:aaaf517, Oct 11 2022, 16:50:30) [MSC v.1933 64 bit (AMD64)] on win32
Type "help", "copyright", "credits" or "license()" for more information.
>>> repeatOrNot = input('Start Y/Stop N ')
... 
... stringBrokenIntoList = []
... 
... initialLetter = []
... 
... elementWithInitialLetter = []
... 
... def arrange(m) :
...     # Getting rid of , ? < !
...     for i in m :
...         if i not in initialLetter :
...             initialLetter.append(i)
...     # Loop for initialLetter
...     iterate0 = 0
...     while iterate0 < len(initialLetter) :
...         iterate1 = 0
...         while iterate1 < len(stringBrokenIntoList) :
...             print('This is first loop', initialLetter[iterate1])
...             iterate1 += 1
...         iterate0 += 1
... 
... while repeatOrNot.lower() == 'y' :
...     stringCollection = input('Please give string ')
...     stringCollection.split()
...     stringBrokenIntoList += stringCollection
...     arrange(stringBrokenIntoList)
