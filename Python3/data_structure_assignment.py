persons = [
    {'name': 'Max',
     'age': 29,
     'hobbies': ['Sports', 'Cooking']},
     {
    'name': 'Anna',
     'age': 28,
     'hobbies': ['Dancing']},
     {
     'name': 'Stan',
     'age': 33,
     'hobbies': ['PBS']},
]

person_names = [person['name'] for person in persons]
#print(persons)
##print(person_names)

are_older = all([person['age'] > 20 for person in persons])
#print(are_older)

copied_persons = persons[:]
copied_persons[0]['name'] = 'Maximilian'
#print(copied_persons)

def unlimited_arguments(*args):
    for arguments in args:
        print(arguments)
unlimited_arguments(1, 2, 3, 4)