from rest_framework import serializers

from .models import Offer

class OfferSerializer(serializers.HyperlinkedModelSerializer):
    class Meta:
        model = Offer
        fields = ('id','Name', 'Reference','Description', 'Begin_date', 'Period','Publication_date')