# Generated by Django 3.1.6 on 2021-02-11 20:25

from django.db import migrations, models


class Migration(migrations.Migration):

    initial = True

    dependencies = [
    ]

    operations = [
        migrations.CreateModel(
            name='Offer',
            fields=[
                ('id', models.AutoField(auto_created=True, primary_key=True, serialize=False, verbose_name='ID')),
                ('Name', models.CharField(max_length=150)),
                ('Reference', models.CharField(max_length=50)),
                ('Description', models.CharField(max_length=500)),
                ('Begin_date', models.DateField()),
                ('Period', models.CharField(max_length=50)),
                ('Publication_date', models.DateField()),
            ],
        ),
    ]