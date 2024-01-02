import React, { useState } from 'react';
import { StyleSheet, Text, View, ScrollView, Pressable, Alert } from 'react-native';
import MapView, { Marker } from 'react-native-maps';
import { GooglePlacesAutocomplete } from 'react-native-google-places-autocomplete';

const AddressScreen = () => {
  const [selectedLocation, setSelectedLocation] = useState(null);

  const handleAddAddress = () => {
    if (!selectedLocation) {
      Alert.alert('Cảnh báo', 'Vui lòng chọn một địa điểm.');
      return;
    }
    // Xử lý khi có địa chỉ được chọn
  };

  return (
    <ScrollView style={{ marginTop: 50 }}>
      <View style={{ padding: 10 }}>
        <Text style={{ fontSize: 17, fontWeight: 'bold' }}>
          Thêm địa chỉ mới
        </Text>

        {/* Bản đồ */}
        {selectedLocation && (
          <MapView
            style={{ height: 200, marginTop: 10 }}
            region={{
              latitude: selectedLocation.latitude,
              longitude: selectedLocation.longitude,
              latitudeDelta: 0.0922,
              longitudeDelta: 0.0421,
            }}
          >
            <Marker
              coordinate={{
                latitude: selectedLocation.latitude,
                longitude: selectedLocation.longitude,
              }}
              title="Vị trí đã chọn"
            />
          </MapView>
        )}

        {/* Ô tìm kiếm địa chỉ từ Google Places API */}
        <GooglePlacesAutocomplete
          placeholder="Nhập địa chỉ"
          onPress={(data, details = null) => {
            setSelectedLocation({
              latitude: details.geometry.location.lat,
              longitude: details.geometry.location.lng,
            });
          }}
          query={{
            key: 'KHÓA_API_GOOGLE_MAPS_CỦA_BẠN',
            language: 'vi',
          }}
          fetchDetails={true}
          enablePoweredByContainer={false}
        />
      </View>

      <Pressable
        onPress={handleAddAddress}
        style={{
          backgroundColor: '#FFC72C',
          padding: 19,
          borderRadius: 6,
          justifyContent: 'center',
          alignItems: 'center',
          marginTop: 20,
        }}
      >
        <Text style={{ fontWeight: 'bold' }}>Thêm </Text>
      </Pressable>
    </ScrollView>
  );
};

export default AddressScreen;
