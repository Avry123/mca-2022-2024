import string

def additiveCipher(char,a) :
    additiveCipher = []
    alphabet = [*string.ascii_lowercase]
    normalList = [*char]
    akey = int(a)
    normalListIndex = [alphabet.index(x) for x in normalList if x in alphabet]
    #Appending index letter to addtivecipher
    for i in normalListIndex :
        x = (i + akey)
        additiveCipher.append(alphabet[x])
    return ''.join(additiveCipher)

def additiveCipher_decrypt(char,a) :
    additiveCipher = []
    alphabet = [*string.ascii_lowercase]
    normalList = [*char]
    akey = int(a)
    normalListIndex = [alphabet.index(x) for x in normalList if x in alphabet]
    #Appending index letter to addtivecipher
    for i in normalListIndex :
        x = i - akey 
        additiveCipher.append(alphabet[x])
    return ''.join(additiveCipher)

startOrStop = input('Start y or Stop n')

while startOrStop.lower() == 'y' :
    letter = input('give me only lowercase words')
    a = input('give me a key')
    print(additiveCipher(letter,a))
    print(additiveCipher_decrypt(additiveCipher(letter,a),a))
    startOrStop = input('Start y or Stop n')
