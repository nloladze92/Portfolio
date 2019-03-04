people = ["amy", "adams", "john", "cedar"]

for name in people:
    if len(name) > 5 and ('n' in name or 'N' in name):
        print(name)