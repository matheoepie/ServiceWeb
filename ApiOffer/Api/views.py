from rest_framework import viewsets

from .serializers import OfferSerializer
from .models import Offer


class OfferViewSet(viewsets.ModelViewSet):
    queryset = Offer.objects.all().order_by('Name')
    serializer_class = OfferSerializer