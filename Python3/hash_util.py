import hashlib as hl
import json

def hash_string_256(string):
    return hl.sha256(string).hexdigest()

def hash_block(block):
    #encode yields binanary characters for the json which 
    #dump turns a dictionary into a string via JSON for the
    #hashing algo, then hexcode turns it from a byte hash to a string
    return hash_string_256(json.dumps(block, sort_keys=True).encode())
    
    #'-'.join([str(block[key]) for key in block])