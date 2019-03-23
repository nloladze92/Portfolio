'''
def pass_in(upper):
    print("some value {:-^20}".format(upper))

def value(*pass_in):
    args = pass_in
    list(map(pass_in, *args))

x = 235235
value(lambda x: x*2)
'''

def transform_data(fn):
    print(fn(10))

transform_data(lambda data: data / 5)

def transform_data2(fn, *args):
    for arg in args:
        print(fn(arg))

transform_data2(lambda data: data / 5, 10, 15, 22, 30)

def transform_data3(fn, *args):
    for arg in args:
        print('Result: {:^20.2f}'.format(fn(arg)))

transform_data3(lambda data: data / 5, 10, 15, 22, 30)