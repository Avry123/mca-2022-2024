import string 
import math

def multiplicativeCipher(char,a) :
    multiplicativeCipher = []
    alphabet = [*string.ascii_lowercase]
    normalList = [*char]
    akey = int(a)
    normalListIndex = [alphabet.index(x) for x in normalList if x in alphabet]
    #Appending index to multiplicativeCipher
    for i in normalListIndex :
        x = (i * akey) % len(alphabet)
        multiplicativeCipher.append(alphabet[x])
    return ''.join(multiplicativeCipher) 

def multiplicative_decrypt(ciphertext, a):
    multiplicativeCipher = []
    alphabet = [*string.ascii_lowercase]
    cipherList = [*ciphertext]
    akey = int(a)
    mod = len(alphabet)
    inv_a = math.gcd(akey, mod)
    cipherListIndex = [alphabet.index(c) for c in cipherList if c in alphabet]
    for i in cipherListIndex:
        x = int(i * inv_a) % len(alphabet)
        multiplicativeCipher.append(alphabet[x])
    return ''.join(multiplicativeCipher)

startOrStop = input('Start y or Stop n')

while startOrStop.lower() == 'y' :
    letter = input('give me only lowercase words')
    a = input('give me a key')
    print(multiplicativeCipher(letter,a))
    print(multiplicative_decrypt(multiplicativeCipher(letter,a),a))
    startOrStop = input('Start y or Stop n')