class name :
    '''This is docstring to illustrate a point'''
    def __init__(self,name):
        self.name = name
    def start(self) :
        '''This does this'''
        print(self.name)

s1 = name('Neel')
print(s1.start.__doc__)

