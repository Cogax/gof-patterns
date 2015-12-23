package event;

/**
 * Created by Andreas Gyr on 23.12.2015.
 */
public abstract class EventBindableAction {
    public abstract void execute();

    public void bind(Event... events) {
        for(Event event : events) {
            event.bindAction(this);
        }
    }
}
