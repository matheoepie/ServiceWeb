# Generated by Django 3.1.6 on 2021-02-11 21:30

from django.db import migrations, models


class Migration(migrations.Migration):

    dependencies = [
        ('Api', '0002_auto_20210211_2228'),
    ]

    operations = [
        migrations.AlterField(
            model_name='offer',
            name='id',
            field=models.AutoField(auto_created=True, primary_key=True, serialize=False, verbose_name='ID'),
        ),
    ]
