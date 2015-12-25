package MvcGui.domain;

import java.util.Observable;

public class Model extends Observable {
    private int value;

    public int getValue() {
        return value;
    }

    public void increment() {
        value++;
        setChanged();
        notifyObservers();
    }
}
