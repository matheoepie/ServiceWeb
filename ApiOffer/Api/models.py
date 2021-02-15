import uuid
from django.db import models

# Create your models here.
class Offer(models.Model):
    id = models.UUIDField(primary_key=True, default=uuid.uuid4, editable=False)
    Name = models.CharField(max_length=150)
    Reference = models.CharField(max_length=50)
    Description = models.CharField(max_length=500)
    Begin_date = models.DateField()
    Period = models.CharField(max_length=50)
    Publication_date = models.DateField()
    User_id = models.CharField(max_length=500)

    def __str__(self):
        return self.Name
