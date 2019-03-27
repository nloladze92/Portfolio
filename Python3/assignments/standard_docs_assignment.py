import datetime
import random

rn1 = random.random()
rn2 = random.randint(1, 10)
print(rn1, rn2)


now = datetime.datetime.now()
print(now)
ru = str(rn1) + str(datetime.datetime.now())
print(ru)