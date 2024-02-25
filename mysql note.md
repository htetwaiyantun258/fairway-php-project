## CRUD

### Create
INSERT INTO roles(name,value)  VALUES('Super',44);

### Read
SELECt id, name FROM roles ORDER BY name DESC LIMIT 3

### Update
UPDATE roles SET name='Editor' WHERE id=2

### Delete
DELETE FROM roles WHERE id=3
