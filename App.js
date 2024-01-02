import { StatusBar } from "expo-status-bar";
import { StyleSheet, Text, View } from "react-native";
import { ModalPortal } from "react-native-modals";
import { Provider } from "react-redux";
import Main from "./main/main";
import store from "./store";
import { UserContext } from "./screens/UserContext";


export default function App() {
  return (
    <>
      <Provider store={store}>
        <UserContext>
          <Main />
          <ModalPortal />
        </UserContext>
      </Provider>
    </>
  );
}

const styles = StyleSheet.create({
  container: {
    flex: 1,
    backgroundColor: "#fff",
  },
});
