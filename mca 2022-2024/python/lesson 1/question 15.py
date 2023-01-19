#WRITE A PYTHON PROGRAM TO DISPLAY FILES UNDER SPECIFIC DIRECTORY.

import os

def listDir(directory) :
    isDirectoryOrNot = os.path.isfile(directory)
    if isDirectoryOrNot :
       for list in os.listdir(directory):
        print(list)
    else : 
       print('Please specify a proper directory ')

startOrStop = input("Start y or Stop n")

while startOrStop.lower() == 'y' :
    directory = input("Enter the directory name : ")
    listDir(directory)
    startOrStop = input("Start y or Stop n")